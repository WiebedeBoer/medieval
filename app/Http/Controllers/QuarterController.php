<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Person;
use App\Place;
use App\Quarter;
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
		$quarters = Quarter::with('dynasties','regions','owners','masters','cities')->get();
        $user = auth()->user();
        
        $places = Place::with('regions')->get();
		return view('quarters.index', compact('quarters','user','places'));        
    }
	
	//show
    public function show($id)
    {       
        $quarter = Quarter::with('dynasties','regions','owners','masters','cities')->where('quarter_id', $id)->firstOrFail();
		$user = auth()->user();
		return view('quarters.show', compact('quarter','user'));        
    }
}
