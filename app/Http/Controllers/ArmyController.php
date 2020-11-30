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
        $armies = Army::with('marshalls','generals','lieutenants','owners','locations')->paginate(50);
        $army_count = Army::count();
		$user = auth()->user();
		return view('armies.index', compact('armies','user','army_count'));        
    }
	
	//show
    public function show($id)
    {       
        $army = Army::with('marshalls','generals','lieutenants','owners','locations')->where('army_id', $id)->firstOrFail();
        $brigade_count = Brigade::where('army', $id)->count();
        if($brigade_count >=1){
            $brigades = Brigade::with('captains')->where('army', $id)->get();
        }
        else {
            $brigades =[];
        }        
		$user = auth()->user();
		return view('armies.show', compact('army','user','brigades','brigade_count'));        
    }	

	//edit
    public function edit($id)
    {       
        $army = Army::with('marshalls','generals','lieutenants','owners','locations')->where('army_id', $id)->firstOrFail();
        $brigade_count = Brigade::where('army', $id)->count();
        if($brigade_count >=1){
            $brigades = Brigade::with('captains')->where('army', $id)->get();
        }
        else {
            $brigades =[];
        }        
		$user = auth()->user();
		return view('armies.edit', compact('army','user','brigades','brigade_count'));        
    }	
	
}
