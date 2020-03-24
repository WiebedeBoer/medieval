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
		
		/*
		title ranks
		1 = virgate
		2 = hide
		3 = tithing
		4 = parish
		5 = barony
		6 = castellany
		7 = county
		8 = march
		9 = duchy
		10 = grand duchy
		11 = kingdom
		12 = empire		
		*/		
		
		$what ="hospice";
		$ora ="hospice";
		$orb ="library";
		$orc ="university";
		$whera ="";
		$wherb ="";
		$wherc ="";
		//$placedata = Place::with('regions')->where('monastic',$what)->orWhere('education', $ora)->orWhere('education', $orb)->orWhere('education', $orc)->orWhere('monastic', $whera)->orWhere('monastic', $wherb)->orWhere('monastic', $wherc)->get();
		//$placedata = Place::with('regions')->where('fortification',$what)->orWhere('place_type', $ora)->orWhere('feudal', $orb)->orWhere('feudal', $orc)->get();
		//$placedata = Place::with('regions')->where('education',$what)->get();
		$placedata = Place::with('regions')->get();
		
		//distinct
		$fortdata = DB::table('places')->distinct('fortification')->select('fortification')->get();
		$disdata = DB::table('places')->distinct('church')->select('church')->get();
		$civdata = DB::table('places')->distinct('civil')->select('civil')->get();
		$mondata = DB::table('places')->distinct('monastic')->select('monastic')->get();
		$fuedata = DB::table('places')->distinct('feudal')->select('feudal')->get();
		
		
		//return
		return view('map.universities', compact('placedata','disdata','civdata','mondata','fortdata','fuedata'));        
    }
	
}
