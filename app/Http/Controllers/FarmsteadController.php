<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Farmstead;
use App\Building;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class FarmsteadController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }
	
	//main 
    public function index()
    {            	
		$farmsteads = Farmstead::with('dynasties','regions','owners','masters','steadnames')->orderBy('farmstead_name','ASC')->get();
		$user = auth()->user();
		return view('farmsteads.index', compact('farmsteads','user'));        
    }
	
	//show
    public function show($id)
    {       
        $farmstead = Farmstead::with('dynasties','regions','owners','masters','steadnames')->where('farmstead_id', $id)->firstOrFail();
		$user = auth()->user();
		return view('farmsteads.show', compact('farmstead','user'));        
    }	
	
}
