<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Place;
use App\Culture;
use App\Religion;
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
	
	//religion show
    public function show($id)
    {            	
        if($id ==1){
			$religion ="Catholic";
		}
		elseif ($id ==2){
			$religion ="Muslim";
		}
		elseif ($id ==3){
			$religion ="Serbian Orthodox";
		}
		elseif ($id ==4){
			$religion ="Greek Orthodox";
		}
		elseif ($id ==5){
			$religion ="Russian Orthodox";
		}
		else {
			$religion ="Catholic";
		}
		$religiondata = Culture::orderBy('culture_name','ASC')->where('manorial_culture', $religion)->get();
		$user = auth()->user();
		return view('religion.show', compact('religiondata','user','religion'));           
    }	
	
}
