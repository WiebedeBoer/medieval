<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Citizen;
use App\Realm;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class CitizenController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }
	
	//main 
    public function index()
    {            	
		$citizens = Citizen::with('citizens','realms')->get();
		$user = auth()->user();
		return view('citizens.index', compact('citizens','user'));        
    }
	
	//show
    public function show($id)
    {       
        $citizen = Citizen::with('citizens','realms')->where('citizen_id', $id)->firstOrFail();
		$user = auth()->user();
		return view('citizens.show', compact('citizen','user'));        
    }
}
