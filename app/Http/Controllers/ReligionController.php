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
			$religiondata = Culture::orderBy('culture_name','ASC')->where('manorial_culture', $id)->get();
		}
		elseif ($id ==5){
			$religion ="Muslim";
			$religiondata = Culture::orderBy('culture_name','ASC')->where('manorial_culture', $id)->get();
		}
		elseif ($id ==2){
			$religion ="Serbian Orthodox";
			$religiondata = Culture::orderBy('culture_name','ASC')->where('manorial_culture', $id)->get();
		}
		elseif ($id ==4){
			$religion ="Greek Orthodox";
			$religiondata = Culture::orderBy('culture_name','ASC')->where('manorial_culture', $id)->get();
		}
		elseif ($id ==3){
			$religion ="Russian Orthodox";
			$religiondata = Culture::orderBy('culture_name','ASC')->where('manorial_culture', $id)->get();
		}
		else {
			$religion ="Catholic";
			$religiondata = Culture::orderBy('culture_name','ASC')->where('manorial_culture', 1)->get();
		}
		
		$user = auth()->user();
		return view('religion.show', compact('religiondata','user','religion'));           
    }	
	
}
