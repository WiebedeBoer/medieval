<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quarter;
use App\Place;
use App\Building;
use App\Room;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class BuildingController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	
	
	//main 
    public function index()
    {            	
		$buildings = Building::with('places','regions','types','quarters','owners','masters')->orderBy('building_name','ASC')->get();
		$user = auth()->user();
		return view('farmsteads.index', compact('buildings','user'));        
    }
	
	//show
    public function show($id)
    {       
        $building = Building::with('places','regions','types','quarters','owners','masters')->where('building_id', $id)->firstOrFail();
		$user = auth()->user();
		return view('farmsteads.show', compact('building','user'));        
    }	
	
}
