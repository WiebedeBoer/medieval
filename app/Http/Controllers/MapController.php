<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Place;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

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
	
	public function universities()
    {            
		$edu ="university";
		$lib ="library";
		$regiondata = Region::all();
		
        foreach($regiondata as $region) 
        {              
            $region_id = $region->region_id;
            $university_count = Place::where('region', $region_id)->where('education', $edu)->count();				
			$region->university_count = $university_count;	
            $library_count = Place::where('region', $region_id)->where('education', $lib)->count();				
			$region->library_count = $library_count;					
        }		
			
		return view('map.universities', compact('regiondata'));   
      
    }
	
}
