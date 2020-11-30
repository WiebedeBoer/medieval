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
        $citizens = Citizen::with('citizens','realms')->paginate(50);
        $citizen_count = Citizen::count();
		$user = auth()->user();
		return view('citizens.index', compact('citizens','user','citizen_count'));        
    }
	
	//show
    public function show($id)
    {       
        $citizen = Citizen::with('citizens','realms')->where('citizen_id', $id)->firstOrFail();
		$user = auth()->user();
		return view('citizens.show', compact('citizen','user'));        
    }

	//edit
    public function edit($id)
    {       
        $citizen = Citizen::with('citizens','realms')->where('citizen_id', $id)->firstOrFail();
		$user = auth()->user();
		return view('citizens.edit', compact('citizen','user'));        
    }
}
