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
		$caravans = Caravan::with('places','dynasties','owners','masters')->orderBy('caravan_name','ASC')->get();
		$user = auth()->user();
		return view('farmsteads.index', compact('caravans','user'));        
    }
	
	//show
    public function show($id)
    {       
        $caravan = Caravan::with('places','dynasties','owners','masters')->where('caravan_id', $id)->firstOrFail();
		$user = auth()->user();
		return view('farmsteads.show', compact('caravan','user'));        
    }		
	
}
