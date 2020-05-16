<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fleet;
use App\Place;
use App\Cargo;
use App\Caravan;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class FleetController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }
	
	//main 
    public function index()
    {            	
		$fleets = Fleet::with('places','dynasties','owners','masters')->orderBy('fleet_name','ASC')->get();
		$user = auth()->user();
		return view('farmsteads.index', compact('fleets','user'));        
    }
	
	//show
    public function show($id)
    {       
        $fleet = Fleet::with('places','dynasties','owners','masters')->where('fleet_id', $id)->firstOrFail();
		$user = auth()->user();
		return view('farmsteads.show', compact('fleet','user'));        
    }		
	
}
