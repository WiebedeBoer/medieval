<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Army;
use App\Brigade;
use App\Place;
use App\Person;
use App\Realm;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class ArmyController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }
	
	//main 
    public function index()
    {            	
		$armies = Army::with('marshalls','generals','lieutenants','owners','locations')->get();
		$user = auth()->user();
		return view('armies.index', compact('armies','user'));        
    }
	
	//show
    public function show($id)
    {       
        $army = Army::with('marshalls','generals','lieutenants','owners','locations')->where('army_id', $id)->firstOrFail();
		$user = auth()->user();
		return view('armies.show', compact('army','user'));        
    }	
	
}
