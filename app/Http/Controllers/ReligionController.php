<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Place;
use App\Culture;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class ReligionController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	
	
	//main culture map
    public function index()
    {            	
		$regionalculture = Region::with('cultures')->get();
		return view('religion.index', compact('regionalculture'));        
    }
}
