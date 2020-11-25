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

    public function climate()
    {            
		$regiondata = Region::all();
		return view('map.climate', compact('regiondata'));        
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

	  public function defenses()
    {            
    $regiondata = Region::all();
    foreach($regiondata as $region) 
    {              
        $region_id = $region->region_id;
        $stat_count = Place::where('region', $region_id)->count();	
        $stat_sum = Place::where('region', $region_id)->sum('def');				
        $region->stat_avg = round($stat_sum / $stat_count);					
    }	
		return view('map.defenses', compact('regiondata'));        
    }

	  public function commerce()
    {            
    $regiondata = Region::all();
    foreach($regiondata as $region) 
    {              
        $region_id = $region->region_id;
        $stat_count = Place::where('region', $region_id)->count();	
        $stat_sum = Place::where('region', $region_id)->sum('com');				
        $region->stat_avg = round($stat_sum / $stat_count);						
    }	
		return view('map.commerce', compact('regiondata'));        
    }

	  public function justice()
    {            
    $regiondata = Region::all();
    foreach($regiondata as $region) 
    {              
        $region_id = $region->region_id;
        $stat_count = Place::where('region', $region_id)->count();	
        $stat_sum = Place::where('region', $region_id)->sum('jus');				
        $region->stat_avg = round($stat_sum / $stat_count);						
    }	
		return view('map.justice', compact('regiondata'));        
    }

	  public function agriculture()
    {            
    $regiondata = Region::all();
    foreach($regiondata as $region) 
    {              
        $region_id = $region->region_id;
        $stat_count = Place::where('region', $region_id)->count();	
        $stat_sum = Place::where('region', $region_id)->sum('agr');				
        $region->stat_avg = round($stat_sum / $stat_count);						
    }	
		return view('map.agriculture', compact('regiondata'));        
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

	  public function gold()
    {            
		  $gold ="gold";
		  $silver ="silver";
		  $regiondata = Region::all();	
        foreach($regiondata as $region) 
        {              
            $region_id = $region->region_id;
            $gold_count = Place::where('region', $region_id)->where('commerce', $gold)->count();				
			      $region->gold_count = $gold_count;	
            $silver_count = Place::where('region', $region_id)->where('commerce', $silver)->count();				
			      $region->silver_count = $silver_count;					
        }				
		  return view('map.gold', compact('regiondata'));     
    }

	  public function gems()
    {            
		  $ruby ="rubies";
      $emerald ="emeralds";
      $sapphire ="sapphire";
		  $regiondata = Region::all();	
        foreach($regiondata as $region) 
        {              
            $region_id = $region->region_id;
            $ruby_count = Place::where('region', $region_id)->where('commerce', $ruby)->count();				
			      $region->ruby_count = $ruby_count;	
            $emerald_count = Place::where('region', $region_id)->where('commerce', $emerald)->count();				
            $region->emerald_count = $emerald_count;
            $sapphire_count = Place::where('region', $region_id)->where('commerce', $sapphire)->count();				
			      $region->sapphire_count = $sapphire_count;							
        }				
		  return view('map.gems', compact('regiondata'));     
    }

	  public function tin()
    {            
		  $metal ="tin";
		  $regiondata = Region::all();	
        foreach($regiondata as $region) 
        {              
            $region_id = $region->region_id;
            $metal_count = Place::where('region', $region_id)->where('commerce', $metal)->count();				
			      $region->metal_count = $metal_count;						
        }				
		  return view('map.tin', compact('regiondata'));     
    }

	  public function iron()
    {            
		  $metal ="iron";
		  $regiondata = Region::all();	
        foreach($regiondata as $region) 
        {              
            $region_id = $region->region_id;
            $metal_count = Place::where('region', $region_id)->where('commerce', $metal)->count();				
			      $region->metal_count = $metal_count;						
        }				
		  return view('map.iron', compact('regiondata'));     
    }

	  public function lead()
    {            
		  $metal ="lead";
		  $regiondata = Region::all();	
        foreach($regiondata as $region) 
        {              
            $region_id = $region->region_id;
            $metal_count = Place::where('region', $region_id)->where('commerce', $metal)->count();				
			      $region->metal_count = $metal_count;						
        }				
		  return view('map.lead', compact('regiondata'));     
    }

	  public function salt()
    {            
		  $metal ="salt";
		  $regiondata = Region::all();	
        foreach($regiondata as $region) 
        {              
            $region_id = $region->region_id;
            $metal_count = Place::where('region', $region_id)->where('commerce', $metal)->count();				
			      $region->metal_count = $metal_count;						
        }				
		  return view('map.salt', compact('regiondata'));     
    }
	
}
