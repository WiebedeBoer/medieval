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
        $fleets = Fleet::with('places','dynasties','owners','masters')->orderBy('fleet_name','ASC')->paginate(50);
        $fleet_count = Fleet::count();
		$user = auth()->user();
		return view('fleets.index', compact('fleets','user','fleet_count'));        
    }
	
	//show
    public function show($id)
    {       
        $fleet = Fleet::with('places','dynasties','owners','masters')->where('fleet_id', $id)->firstOrFail();
        $user = auth()->user();
        $cargo_count = Cargo::where('fleet', $id)->count();
        if($cargo_count >=1){
            $cargoes = Cargo::with('owners','dynasties','resources')->where('fleet', $id)->get();
        }
        else {
            $cargoes =[];
        } 
		return view('fleets.show', compact('fleet','user','cargoes','cargo_count'));        
    }	
    
	//edit
    public function edit($id)
    {       
        $fleet = Fleet::with('places','dynasties','owners','masters')->where('fleet_id', $id)->firstOrFail();
        $user = auth()->user();
        $cargo_count = Cargo::where('fleet', $id)->count();
        if($cargo_count >=1){
            $cargoes = Cargo::with('owners','dynasties','resources')->where('fleet', $id)->get();
        }
        else {
            $cargoes =[];
        } 
		return view('fleets.edit', compact('fleet','user','cargoes','cargo_count'));        
    }
	
}
