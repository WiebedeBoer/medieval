<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Person;
use App\Building;
use App\Quarter;
use App\Place;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class QuarterController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }
	
	//main 
    public function index()
    {            	
		$quarters = Quarter::with('dynasties','regions','owners','masters','cities')->orderBy('place', 'asc')->orderBy('x', 'asc')->orderBy('y', 'asc')->paginate(49);
        $user = auth()->user(); 
		return view('quarters.index', compact('quarters','user'));        
    }
	
	//show
    public function show($id)
    {       
        $quarter = Quarter::with('dynasties','regions','owners','masters','cities')->where('quarter_id', $id)->firstOrFail();
        $building_count = Building::where('quarter', $id)->count();
        if ($building_count >=1){
            $buildings = Building::with('places','regions','types','quarters','owners','masters')->where('quarter', $id)->get();
        }
        else {
            $buildings = [];
        }
        
		$user = auth()->user();
		return view('quarters.show', compact('quarter','user','building_count','buildings'));        
    }
}
