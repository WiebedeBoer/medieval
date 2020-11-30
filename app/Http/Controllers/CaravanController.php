<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fleet;
use App\Place;
use App\Cargo;
use App\Caravan;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class CaravanController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }
	
	//main 
    public function index()
    {            	
        $caravans = Caravan::with('places','dynasties','owners','masters')->orderBy('caravan_name','ASC')->paginate(50);
        $caravan_count = Caravan::count();
		$user = auth()->user();
		return view('caravans.index', compact('caravans','user','caravan_count'));        
    }
	
	//show
    public function show($id)
    {       
        $caravan = Caravan::with('places','dynasties','owners','masters')->where('caravan_id', $id)->firstOrFail();
        $user = auth()->user();
        $cargo_count = Cargo::where('caravan', $id)->count();
        if($cargo_count >=1){
            $cargoes = Cargo::with('owners','dynasties','resources')->where('caravan', $id)->get();
        }
        else {
            $cargoes =[];
        } 
		return view('caravans.show', compact('caravan','user','cargoes','cargo_count'));        
    }	
    
	//edit
    public function edit($id)
    {       
        $caravan = Caravan::with('places','dynasties','owners','masters')->where('caravan_id', $id)->firstOrFail();
        $user = auth()->user();
        $cargo_count = Cargo::where('caravan', $id)->count();
        if($cargo_count >=1){
            $cargoes = Cargo::with('owners','dynasties','resources')->where('caravan', $id)->get();
        }
        else {
            $cargoes =[];
        } 
		return view('caravans.edit', compact('caravan','user','cargoes','cargo_count'));        
    }	
	
}
